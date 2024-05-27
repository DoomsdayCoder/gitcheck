import React, { useContext, useRef, useState } from 'react'

import { Link } from 'react-router-dom';
import Button from '../../components/DefaultButton';
import Input from '../../components/Input';
import axios from 'axios';
import axiosClient from '../../axios';
import { StateContext } from '../../context/context';

export default function Login() {

    const { setToken,setUser } = useContext(StateContext)
    const [signup, setSignup] = useState(false);
    const [disabled, setDisabled] = useState(false);
    const username = useRef()
    const password = useRef()
    const passConf = useRef()


    const formChange = () => { setSignup(!signup) }

    const formControl = {
        heading: signup ? 'Sign Up' : 'Log In',
        tag: signup ? 'Already have an account' : 'Create a new account',
        linkTag: signup ? 'Log In' : 'Sign Up',
    }

    const button = {
        type: 'submit',
        title: formControl.heading,
        disabled: disabled
    }
    const inputs = [
        {
            className: 'mb-4',
            name: 'username',
            label: 'Username',
            placeholder: 'Enter Username',
            ref: username
        },
        {
            className: 'mb-4',
            name: 'password',
            type: 'password',
            label: 'Password',
            placeholder: 'Enter Password',
            ref: password
        },
        signup ? {
            className: 'mb-4',
            name: 'password_confirmation',
            type: 'password',
            label: 'Re Enter Password',
            placeholder: 'Confirm Password',
            ref: passConf
        } : null
    ]

    const handleSub = (e) => {
        e.preventDefault();
        setDisabled(true)
        let data = {
            "username": username.current.value,
            "password": password.current.value
        }
        if(signup) {
            data['password_confirmation'] = passConf.current.value
        }
        axiosClient.post(`${signup ? '/register' : '/authenticate'}`, data)
            .then(({ data }) => {
                setToken(data.token)
                setUser(data.user)
            })
            .catch((error) => {
                if (error.response) {
                    setDisabled(false)
                    const finalErrors = Object.values(error.response.data.errors).reduce((acc, next) => [...acc,...next],[])
                    console.log(finalErrors);
                }
            })


    }

    return (
        <form onSubmit={(e) => handleSub(e)} className='p-4 flex flex-col'>
            <h5 className="text-gray-300 text-4xl font-bold mb-4">{formControl.heading}</h5>
            <div className="card-text">
                {inputs.map((input, index) => { if (input !== null) return <Input {...input} key={index} /> })}
            </div>
            <Button {...button}></Button>
            {signup ? null : <Link to='/auth/forgotPassword'>Forgot password</Link>}
            <div className='mt-4'>{formControl.tag} <Link onClick={formChange}>{formControl.linkTag}</Link></div>
        </form >
    )
}
