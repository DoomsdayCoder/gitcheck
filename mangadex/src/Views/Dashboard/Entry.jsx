import React from 'react'
import Input from '../../components/Input'
import Preview from '../../components/ImagePreview'


export default function Entry() {
    return (
        <>


            {/* <div className="card border border-0 rounded-0 trans">
                <div className="card-header d-flex flex-column flex-lg-row gap-4 mb-3">
                    <Preview />
                    <div className="card-body var-2 d-flex  gap-3">

                        <div className="checktype">
                            <div>Title:</div>
                            <Input name='name' className="w-100" req='required' placeholder='Manhwa / Manhua' autoComplete="false" />
                            <div>R_Status:</div>
                            <select name='reading_status' className="form-select" aria-label="Select Status">
                                <option value="Unread">Unread</option>
                                <option value="Reading"> Reading</option>
                                <option value="Completed">Completed</option>
                            </select>
                            <div>M_Status:</div>
                            <select name='manga_status' className="form-select" aria-label="Select Status">
                                <option value="Ongoing" >Ongoing</option>
                                <option value="Hiatus">Hiatus</option>
                                <option value="Completed">Finished</option>
                                <option value="Dropped">Dropped</option>
                            </select>
                            <div>Ch_no:</div>
                            <Input name='bookmark' className="w-100" placeholder='Enter last chapter you read..' />

                            <div>Website:</div>
                            <Input name='link' className="w-100" placeholder="manhwa / manhua url" />
                        </div>
                        <div className="checktype">
                            <div>Tags</div>
                        </div>
                    </div>

                </div>

            </div > */}


            <div className="card p-5 align-self-start">
                <Preview className={"mx-auto"} />
                <Input name='name' label='Enter Manhua name' placeholder="Manhua / manhwa / manga / comic"></Input>
                <div className="d-flex gap-4">
                    <div>
                        Reading Status:
                        <select name='reading_status' className="form-select" aria-label="Select Status">
                            <option value="Unread">Unread</option>
                            <option value="Reading"> Reading</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                    <div>
                        Completion State:
                        <select name='manga_status' className="form-select" aria-label="Select Status">
                            <option value="Ongoing" >Ongoing</option>
                            <option value="Hiatus">Hiatus</option>
                            <option value="Completed">Finished</option>
                            <option value="Dropped">Dropped</option>
                        </select>
                    </div>
                </div>
                <div className="d-flex gap-4 w-100">

                    <Input name='bookmark' label="Last chapter read" placeholder='Enter last chapter you read..' />
                    <Input name='link' label="Reading Site" placeholder="manhwa / manhua url" />
                    <Input name='tags' label="Tags" placeholder="Enter Tags" className="w-100"/>
                </div>
                

            </div>
        </>
    )
}
