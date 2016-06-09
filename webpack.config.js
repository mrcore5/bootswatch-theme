const path = require('path');
const merge = require('webpack-merge');
const webpack = require('webpack');
const stylelint = require('stylelint');
const stylelintConfig = require('stylelint-config-standard');
//const NpmInstallPlugin = require('npm-install-webpack-plugin');

const TARGET = process.env.npm_lifecycle_event;
const PATHS = {
	app: path.join(__dirname, 'app'),
	assets: path.join(__dirname, 'app/assets'),
	public: path.join(__dirname, 'public')
};
process.env.BABEL_ENV = TARGET;

const common = {
	entry: {
		app: PATHS.app
	},

	// Add resolve.extensions.
	// '' is needed to allow imports without an extension.
	// Note the .'s before extensions as it will fail to match without!!!
	resolve: {
		extensions: ['', '.js', '.jsx']
	},

	output: {
		path: PATHS.public,
		filename: 'bundle.js'
	},
	moduleÏ: {
		preLoaders: [
			{
				test: /\.jsx?$/,
				loaders: ['eslint'],
				includes: PATHS.app
			},
			{
				test: /\.scss$/,
				loaders: ['postcss'],
				includes: PATHS.app
			}
		],
		loaders: [
			{
				test: /\.jsx?$/, // matches .js too thanks to REGEX pattern
				loader: 'babel?cacheDirectory', // 'babel-loader' is also a legal name to reference
				//query: {
				//	cacheDirectory: true,
					//presets: ['react', 'es2015'] //no, using .babelrc now
				//},
				include: PATHS.app
				//include: __dirname + '/src',
				//exclude: /(node_modules|bower_components)/,
			},
			{
				test: /\.scss$/,
				loaders: ['style', 'css', 'sass'],
				include: PATHS.assets
			}
		]
	},
	postcss: function() {
		return [stylelint(stylelintConfig)];
		/*return [stylelint({
			rules: {
				"declaration-colon-space-after": "always"
			}
		})];*/
	}
}

if (TARGET === 'start' || !TARGET) {
	// This configuration is used when we run: npm run start
	module.exports = merge(common, {
		devtool: 'eval-source-map',

		devServer: {
			contentBase: PATHS.public,

			// Enable history API fallback so HTML5 History API based
			// routing works. This is a good default that will come
			// in handy in more complicated setups.
			historyApiFallback: true,
			hot: true,
			inline: true,
			progress: true,

			// Display only errors to reduce the amount of output.
			stats: 'errors-only',

			// Parse host and port from env so this is easy to customize.
			//
			// If you use Vagrant or Cloud9, set
			// host: process.env.HOST || '0.0.0.0';
			//
			// 0.0.0.0 is available to all network devices unlike default
			// localhost
			host: process.env.HOST || '0.0.0.0',
			port: process.env.PORT || 3000
		},
		/*plugins: [
			new webpack.HotModuleReplacementPlugin(),
			new NpmInstallPlugin({
				save: true // --save
			})
		]*/
	});
}

if (TARGET === 'build') {
	// This configuration is used when we run: npm run build
	module.exports = merge(common, {});
}
