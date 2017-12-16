const ExtractTextPlugin = require('extract-text-webpack-plugin');
const bootstrapEntryPoints = require('./webpack.bootstrap.config');
const isProd = process.env.NODE_ENV === 'production';

var bootstrapConfig = isProd ? bootstrapEntryPoints.prod : bootstrapEntryPoints.dev;

module.exports = {

	entry: [bootstrapConfig,
			'./src/js/testapp.js'
		 ]
	,
	output: {	
		filename: './dist/testapp.bundle.js'
	},
	module: {
		rules: [
			
			
			{test: /\.(css|scss)$/,  use: ['style-loader', 'css-loader','sass-loader' ]},
			{test: /\.(jpe?g|png|gif|svg)$/, use: 'file-loader?name=[name].[ext]&outputPath=./src/images/'},
			{test: /\.(ttf|eot|woff|woff2)$/, use: 'file-loader?name=[name].[ext]&outputPath=./src/fonts/'},
			{test:/bootstrap-sass[\/\\]assets[\/\\]javascripts[\/\\]/, loader: 'imports-loader?jQuery=jquery'}
		]
	},
	plugins: [

		new ExtractTextPlugin({

			filename: __dirname + "/src/css/[name].css",
			disable: false,
			allChunks: true
		})

	]
}