import React, { useContext, useEffect } from 'react'
import { Link } from 'react-router-dom'
import { Down, Gear, House, Logo, Logout, Menu, MenuClose, User } from '../assets/Assests.jsx'
import axiosClient from '../axios.jsx'
import { StateContext } from '../context/context.jsx'


function Navbar() {
  const { user, setToken, setUser } = useContext(StateContext)
  const logout = () => {
    axiosClient.post('/logout')
      .then(({ data }) => {
        if (data.success) {
          setToken(null)
          setUser(null)
        }
      })
  }

  return (
    <>
      <nav className='py-4 px-4 flex bg-zinc-900 bg-opacity-90 border-b border-zinc-700'>
        <label htmlFor='navToggleInput' className='navToggleInputLabel my-auto mr-5'>
          <input type="radio" name='navToggle' id="navToggleInput" className="hidden" />
          <div>
            <Menu />
          </div>

        </label>



        <Logo />
      </nav>
      <div className="navigation-bar  flex flex-col  bg-opacity-90 bg-zinc-950 ">
        <div className='py-4 px-4 flex w-full bg-zinc-900 bg-opacity-50 border-b border-zinc-700'>
          <Link to={'/'} className='flex items-center'>
            <Logo />
            <h1 className='font-bold text-2xl ml-3'>ComicHive</h1>
          </Link>
          <label className='navToggleInputLabel my-auto ml-auto'>
            <input type="radio" name='navToggle' className="hidden" />
            <div className='p-1'>
              <MenuClose />
            </div>
          </label>
        </div>

        <div className="px-4 py-10 flex flex-col gap-14 w-full flex-grow border-r border-zinc-700">
          <NavigationLink to='/'>Home <House className='fill-current w-5' /></NavigationLink>
          <NavigationLink to='/editprofile'>Edit Profile <User className='fill-current w-5' /></NavigationLink>
          <NavigationLink to='/settings'>Settings <Gear className='fill-current w-5' /></NavigationLink>
          <DropDown>Manage Tags <Down className='fill-current w-3' /> </DropDown>
          <DropDown>Manage Folders <Down className='fill-current w-3' /></DropDown>

          <LogoutButton logout={logout} />
        </div>

      </div>
    </>
  )
}

const NavigationLink = (props) => {
  return (
    <Link to={props.to || ''} className='flex text-nowrap items-center justify-between'>
      {props.children || ''}
    </Link>
  )
}
const DropDown = (props) => {
  return (
    <div className='flex text-nowrap items-center justify-between'>
      {props.children[0] || ''}
      <button>
        {props.children[1] || ''}
      </button>

    </div>
  )
}

const LogoutButton = ({ logout = () => { } }) => {
  return (
    <button className='mt-auto text-start px-4 py-3 w-full border-2 rounded-lg flex' onClick={logout}>
      Logout
      <Logout className='w-5 ml-auto fill-current' />
    </button>
  )
}

export default Navbar