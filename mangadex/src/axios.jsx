import axios from "axios";

const axiosClient = axios.create({
    baseURL: `http://localhost:8000/api`,
    headers: { 
        "Content-Type": " application/json; charset=UTF-8",
        // "X-CSRF-TOKEN":"e3c2df8ce542ddef52d42af87eb62aafdf5bfd23a419e68922bdd2590324a111"
    }
})
// axiosClient.defaults.withCredentials = true;
// axiosClient.defaults.withXSRFToken = true;

axiosClient.interceptors.request.use((config)=> {
    config.headers.Authorization = `Bearer ${localStorage.getItem('TOKEN') || ""}`    
    return config
})

axiosClient.interceptors.response.use(response=> {
    return response;
}, error => {
    if(error.response && error.response.status === 401) {
        /* router.navigate('/auth') */
        return error;
    }
    throw error;
})

export default axiosClient;