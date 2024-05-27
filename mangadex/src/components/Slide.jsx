import React, { useEffect, useRef, useState } from 'react'
import { ArrowLeft, ArrowRigth, Heart, HeartStroke } from '../assets/Assests';
import { Link } from 'react-router-dom';
import Card from './Card';


export default function Slide({ children, className, header, linkTo }) {
    const cardContainer = useRef();
    const slideContainer = useRef();
    const [scrollDistance, setScrollDistance] = useState();
    const spacing = {
        gap: 32
    }
    let scroll = 0

    useEffect(() => {
        // console.log(slideContainer.current)
        cardContainer.current.scrollLeft > 0 && cardContainer.current.scrollTo({ behavior: "smooth", left: 0 })
        setScrollDistance(cardContainer.current.firstChild.offsetWidth + spacing.gap);
    }, [])


    const nextElem = () => {
        if (cardContainer.current.scrollLeft === cardContainer.current.scrollLeftMax) {
            scroll = 0
        }
        else {
            scroll += scrollDistance
        }
        cardContainer.current.scrollTo({
            behavior: "smooth",
            left: scroll
        })
    }
    const prevElem = () => {
        if (cardContainer.current.scrollLeft === 0) {
            scroll = cardContainer.current.scrollLeftMax
        }
        else {
            scroll -= scrollDistance
        }
        cardContainer.current.scrollTo({
            behavior: "smooth",
            left: scroll
        })
    }

    return (
        <div className={`${className || ''}`}>
            <div className="flex items-center px-6">
                <div className='flex items-end gap-4'>
                    <div className='text-5xl font-bold'>{header}</div>
                    <Link to={linkTo || ''} className='text-base text-green-500 underline underline-offset-4'>View all</Link>
                </div>
                <div className="flex ml-auto gap-3">
                    <button className='slider_btn fill-blue-400' onClick={prevElem}><ArrowLeft /></button>
                    <button className='slider_btn fill-blue-400' onClick={nextElem}><ArrowRigth /></button>
                </div>
            </div>

            <div className="slider_container relative pl-6" ref={slideContainer}>
                <div className="card_scroller pr-6" ref={cardContainer} style={spacing}>
                    {children.map((e, index) => {
                        return (
                            <Card image={e.img} key={index}/>
                        )
                    })}
                </div>

            </div>
        </div>
    )
}
