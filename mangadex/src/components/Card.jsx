import React, { useEffect, useRef, useState } from 'react'
import { Link } from 'react-router-dom'
import { Heart, HeartStroke } from '../assets/Assests'


export default function Card({ image }) {
    const [favorites, setFav] = useState(false)

    const promise = new Promise((resolve)=> {
        setTimeout(()=> {
            resolve('hello')
        }, 2000)
    })

    

    const handleClick = async ()=> {
        const value = await promise;
        console.log(value);
    }

    return (
        <Link to=''>
            <div className="home_card rounded-lg overflow-hidden" >
                <button className={`grid place-items-center w-[2rem] aspect-square absolute top-2 right-2 px-[6px] bg-zinc-100 rounded-full z-[50] drop-shadow-lg`}
                    onClick={() => handleClick() /* setFav(!favorites) */}>
                    <Heart className={favorites ? 'fill-red-500' : 'fill-zinc-800'} />
                    {/* <HeartStroke className='fill-zinc-100' /> */}
                </button>
                <div className="card_img_box">
                    <img src={image || '...'} className="" alt="..." />
                </div>
                <div className="card_body_box px-2">
                    <h5 className="card-title mb-1 text-slate-100 text-xl font-semibold">Lorem ipsum dolor sit amet.</h5>
                    <p className="card-text mb-2 text-base">Status: Reading</p>
                </div>
            </div>
        </Link>
    )
}
