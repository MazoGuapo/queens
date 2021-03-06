const path = require("path");

module.exports = {
  mode: 'production',
  entry: "./src/assets/js/main.js",
  output: {
    filename: "main.bundle.js",
    path: path.resolve(__dirname, "dist/assets/js/"),
  },
};
