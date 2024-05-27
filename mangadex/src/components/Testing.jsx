import React, { useEffect, useState } from 'react'

export default function Testing({children}) {

    const [arr, setArr] = useState([1,2,3,4,5])
    const child = children
    useEffect(() =>{
        console.log(child);
    },[children])

    const next = ()=> {
        children.push(children.shift());
    }
    return (
        <div className='d-flex gap-3'>
            {children}
            <button onClick={()=> next()}>
                next
            </button>
        </div>
    )
}
