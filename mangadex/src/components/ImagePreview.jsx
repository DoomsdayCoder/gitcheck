import React, { useState } from 'react'
import Spinner from './Spinner';

export default function Preview({className}) {
    const [loading, setLoading] = useState(false)
    const [imgHeight, setimgHeight] = useState("auto")
    const [image, setImage] = useState('no-image.png')


    const handleChange = (evt) => {
        setLoading(true)
        setImage(URL.createObjectURL(evt.target.files[0]))
    }
    const handleLoad = (e) => {
        if(image === 'no-image.png') return;
        e.target.naturalWidth >= e.target.naturalHeight ? setimgHeight("100%") : setimgHeight("auto")
        setLoading(false)
    }



    return (
        <div className={`card preview-box var-3 rounded-1 ${className}`}>
            <div className="preview-image-container">
                
                <img src={image} style={{ height: imgHeight }} onLoad={handleLoad} loading='lazy' />
                {loading === true && <Spinner />}
            </div>
            <input className="form-control" type="file" name='cover_image' onChange={handleChange} disabled={loading}/>
        </div>
    )
}
