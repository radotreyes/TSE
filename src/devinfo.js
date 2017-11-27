const b = 'dev/1.0/staging'
const a = `
###

TSE Website Development Branch (${b})

Author: Reuben Reyes (radotreyes.github.io)
  * github: radotreyes
  * twitter: @bfcewf

Dependencies:
  * React                     16.1.1
    - react-dom               16.1.1

  * Webpack                    3.8.1
    - webpack-dev-server       2.9.4

  * Babel                     6.26.0
    - babel-loader             7.1.2
    - babel-preset-env         1.6.1
    - babel-preset-react      6.24.1
    - babel-preset-stage-2    6.24.1

###
`

const DEV_INFO = {
  about: a,
  branch: b
}

export default DEV_INFO
