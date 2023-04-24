import axios from 'axios';

const axiosClient = axios.create({
 baseURL: `${import.meta.env.VITE_API_BASE_URL}/api`
})

axiosClient.interceptors.request.use((config) =>{
const token= '123';
config.headers.Authorization= `Bearer${token}`

})
axiosClient.interceptors.response.use(response => {
    return response;

}, errpr=>{
    if (error.resoponse && error.response.statuse === 401){
        Router.navigate('/login')
        return error;
    }
    throw error;
})
export default axiosClient;