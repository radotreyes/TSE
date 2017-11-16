import React from 'react'
import ReactDOM from 'react-dom'

import App from './app.jsx'
import DEV_INFO from './devinfo.js'

// meta
console.log(DEV_INFO.about)
const title = `TSE ${DEV_INFO.branch}`
//

const MOUNT_TO_DIV = document.getElementById('root')

ReactDOM.render(
  <div>
    <h1>{title}</h1>
    <App world="from test component"/>
  </div>,
  MOUNT_TO_DIV
)
