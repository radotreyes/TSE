import React, { Component } from 'react'
import ReactDOM from 'react-dom'

class App extends Component() {
  constructor(props) {
    super(props)

    this.state = {date: new Date()}
  }
  render() {
    return (
      <div>{this.state.date.toLocaleTimeString()}</div>
    )
  }
}

export default App;
