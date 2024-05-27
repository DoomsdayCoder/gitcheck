import React from 'react'
import Button from '../../components/DefaultButton'
import Input from '../../components/Input'
import { Link } from 'react-router-dom'

export default function ForgotPassword() {
    const inputs = [{
        name: 'email',
        type: 'email',
        placeholder: 'Enter Registered Username'
    }]
    const button = {
        type: 'submit',
        title: "Submit",
    }
    return (
        <form onSubmit={(e) => handleSub(e)} className='p-4 flex flex-col'>
            <h5 className="text-gray-300 text-4xl font-bold mb-2">Forgot Password</h5>
            <p className='w-[50ch] mb-4 text-zinc-400'>Enter your Registered Username. An email will be send on registered Email for password reset link.</p>
            <div className="flex items-center gap-1 mb-2">
                {inputs.map((input, index) => <Input {...input} key={index} />)}
                <Button {...button}></Button>
            </div>
            <Link to='/auth'>Go back to Login Page</Link>
        </form >
    )
}
