const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require("copy-webpack-plugin");

const mode = process.env.NODE_ENV || "development";
// Temporary workaround for 'browserslist' bug that is being patched in the near future
const target = process.env.NODE_ENV === "production" ? "browserslist" : "web";

module.exports = {
    // mode defaults to 'production' if not set
    mode: mode,

    entry: {
        construction: [
            path.resolve(__dirname, './src/js/construction.js'), 
            path.resolve(__dirname, './src/scss/construction.scss'), 
        ],
        about: path.resolve(__dirname, './src/js/about.js'),
    },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, './public/js'),
    },

    plugins: [
        new CopyPlugin({
            patterns: [
                
                { from: path.resolve(__dirname, './src/img/'),  to: path.resolve(__dirname, './public/img/'), },
                { from: path.resolve(__dirname, './src/fonts/'),  to: path.resolve(__dirname, './public/fonts/'), },
            ],
        }),
        new MiniCssExtractPlugin({
        filename: '../css/[name].css',
        chunkFilename: '../css/[id].css',
        }),
    ],

    module: {
        
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    // without additional settings, this will reference .babelrc
                    loader: "babel-loader",
                },
            },
            {
                test: /\.(png|jpg|gif|svg)$/,
                exclude: [
                    path.resolve(__dirname, './node_modules'),
                    [/fonts/]
                ],
                use: [
                    {
                        loader: "file-loader",
                        options: {
                            name: "../../[path][name].[ext]",
                            // outputPath: '../../public/img/',
                            // publicPath: '../../public/img/',
                            //esModule: false
                        }
                    }
                ]
            },
            {
                test: /\.(svg|eot|ttf|woff|woff2)$/,
                exclude: [
                    path.resolve(__dirname, './node_modules'),
                    [/img/],
                ],
                use: [
                    {
                        loader: "file-loader",
                        options: {
                            name: "../../[path][name].[ext]",
                            // outputPath: '../../public/fonts/',
                            // publicPath: '../../public/fonts/',
                            esModule: false
                        }
                    }
                ]
            },
            {
                test: /\.(s[ac]|c)ss$/i,
                exclude: path.resolve(__dirname, './node_modules'),
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            publicPath: path.resolve(__dirname, '/public/css/'), 
                        }                    
                    },    
                    {
                        loader: 'css-loader',
                    },   
                    {
                        loader: 'postcss-loader',
                    },       
                    {
                        loader: 'sass-loader',
                    },
                ],
            
            },
            
            
            



        ]
    },




    // defaults to "web", so only required for webpack-dev-server
    target: target,
    devtool: 'source-map',

    // required if using webpack-dev server
    devServer: {
        contentBase: "./public",
    }



};