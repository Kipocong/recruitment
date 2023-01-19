import React from 'react'
import Hero from './Hero'
import Nav from './Nav'

const Header = () => {
  return (
    <header className='home-header'>
      <div className="home-container">
        <Nav />
        <Hero />
      </div>
    </header>
  )
}

export default Header
