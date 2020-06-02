const webpack = require('webpack');

module.exports = {
    entry: './script.js',
    output: {
        filename: 'js/bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.js?/, 
                loader: 'babel-loader', 
                exclude: /node_modules/,
                query: {
                    presets: ['env']
                }
            }
        ]
    }
};