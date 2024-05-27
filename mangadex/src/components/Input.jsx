import React, { forwardRef, useState } from 'react'
import { PropTypes } from 'prop-types';
import { ClosedEye, Eye } from '../assets/Assests';


const Input = forwardRef((props, ref) => {
    const [pview, setPview] = useState(false)

    const handleChange = (e) => {
        setPview(!pview)
    }

    return (
        <label className={`flex flex-col gap-1 ${props.className || ''}`} >
            {props.label ? <p>{props.label}</p> : null}
            <div className="input_control_container">
                <input className='form-control' type={pview ? "text"  : props.type} name={props.name} placeholder={props.placeholder} ref={ref} />
                {props.type === "password" && <ShowPassword handleChange={handleChange} passwordView={pview}/>}
            </div>
        </label>
    )
}
)

const ShowPassword = ({handleChange=()=> {}, passwordView}) => {
    return (
        <label>
            {passwordView ? <Eye/> : <ClosedEye/>}
            <input type='checkbox' className='hidden' onClick={() => handleChange()}/>
        </label>
    )
}
export default Input;
Input.propTypes = {
    className: PropTypes.string,
    type: PropTypes.string,
    placeholder: PropTypes.string,
    name: PropTypes.string,
    label: PropTypes.string,
}
