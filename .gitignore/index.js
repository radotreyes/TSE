import React from 'react'
import ReactDOM from 'react-dom'

import { LandingPage } from './templates.jsx'
import DEV_INFO from './devinfo.js'

// meta
console.log( DEV_INFO.about )
const title = `TSE ${DEV_INFO.branch}`
//

const MOUNT_TO_DIV = document.getElementById( 'root' )

ReactDOM.render(
  <div>
    <h1>{title}</h1>
    <LandingPage name="landing page"/>
  </div>,
  MOUNT_TO_DIV
)
