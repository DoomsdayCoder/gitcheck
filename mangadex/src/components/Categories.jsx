import React from 'react'
import { Link } from 'react-router-dom'
import Slide from './Slide'

export default function Categories({ children, header, link = '#', className }) {
    return (
        <div className={`flex-column ${className}`}>
            <div className="heading_container fs-4 mb-3">
                {header} &nbsp;&nbsp;&nbsp;&nbsp;<Link to={link} className='fs-5 link-info'>Explore<i className="bi bi-chevron-right text-info"></i></Link>
            </div>

            <Slide>
                {children.map((e, index) => {
                    return (
                        <Link to='' key={index}>
                            <div className="home_card rounded-lg overflow-hidden" >
                                <div className="card_img_box">
                                    <img src={e.img} className="" alt="..." />
                                </div>
                                <div className="card_body_box px-2">
                                    <h5 className="card-title mb-1 text-slate-100 text-xl font-semibold">Lorem ipsum dolor sit amet.</h5>
                                    <p className="card-text mb-2 text-base">Status: Reading</p>
                                </div>
                            </div>
                        </Link>

                    )
                })}
            </Slide>
        </div>
    )
}
