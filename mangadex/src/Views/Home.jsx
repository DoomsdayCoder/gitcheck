import React from 'react'
import Categories from '../components/Categories'
import Slide from '../components/Slide'


export default function Home() {

    const dummyArray = [{ "img": "/LayoutAssets/bg.jpg" }, { "img": "/LayoutAssets/mountains.webp" },
    { "img": "/LayoutAssets/bg.jpg" }, { "img": "/LayoutAssets/mountains.webp" },
    { "img": "/LayoutAssets/bg.jpg" }, { "img": "/LayoutAssets/mountains.webp" },
    { "img": "/LayoutAssets/bg.jpg" }, { "img": "/LayoutAssets/mountains.webp" },
    { "img": "/LayoutAssets/bg.jpg" }, { "img": "/LayoutAssets/mountains.webp" },
    { "img": "/LayoutAssets/bg.jpg" }, { "img": "/LayoutAssets/mountains.webp" },
]


    return (
        <div className='flex flex-col gap-5'>
            <Slide header="Dummy text">
                {dummyArray}
            </Slide>

            <Slide header="Dummy text">
                {dummyArray}
            </Slide>

            <Slide header="Dummy text">
                {dummyArray}
            </Slide>


            <Slide header="Dummy text">
                {dummyArray}
            </Slide>

            <Slide header="Dummy text" >
                {dummyArray}
            </Slide>
        </div>
    )
}
