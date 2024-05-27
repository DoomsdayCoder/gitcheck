import React ,{ useContext } from 'react'
import { Navigate, Outlet } from 'react-router-dom'
import { StateContext } from '../context/context'



export default function GuestLayout() {
    const {token} = useContext(StateContext)
    if(token) {
        return <Navigate to={'/'} />
    }
    return (
        <div className="GuestLayout">
            <div className="m-auto border border-gray-600 rounded-xl overflow-hidden">
                <div className="grid grid-cols-[1fr_2fr]">
                    <div className="user-login-card-image"></div>
                    <Outlet></Outlet>
                </div>
            </div>
        </div>
    )
}
