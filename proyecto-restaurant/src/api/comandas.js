import axios from 'axios'
import qs from "qs"


const comandas = () => axios.get('get-comandas');

export default{
    comandas
}