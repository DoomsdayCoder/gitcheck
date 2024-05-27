import React, { useContext } from 'react'
import { Navigate, Outlet } from 'react-router-dom'
import Navbar from '../components/Navbar.jsx'
import { StateContext } from '../context/context.jsx'


function DefaultLayout() {
  const { token } = useContext(StateContext)
  if (!token) {
    return <Navigate to='/auth' />
  }
  return (
    <>
    <Navbar></Navbar>
    <div className="bg-transparent ui-container">
      
      
      <div className='content-og-box'>
        <Outlet></Outlet>
      </div>
    </div>
    </>

  )
}

export default DefaultLayout