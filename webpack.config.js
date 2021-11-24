const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  devServer: {
    contentBase: path.join(__dirname, 'public/dist'),
  },
  entry: {
      app: ['./app/src/app.js'],
  },
  output: {
    filename: '[name].[contenthash].js',
    path: path.resolve(__dirname, 'public/dist'),
  },
  plugins: [
    new CleanWebpackPlugin({
      dangerouslyAllowCleanPatternsOutsideProject: true,
      dry: false,
    })
  ],
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          {
            loader: 'file-loader',
            options: {
                outputPath: '../dist',
                name: '[name].[contenthash].css',
            },
          },
          "sass-loader",
        ],
      },
    ],
  }
};