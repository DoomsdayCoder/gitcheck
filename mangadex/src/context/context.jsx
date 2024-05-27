
import React, { useEffect,useState, createContext } from 'react'
import axiosClient from '../axios';

export const StateContext = createContext({
    lib: [],
    token: null,
    user: {},
    setData: () => { },
    setToken: () => { },
    setUser: () => { },
});

export const Contextprovider = ({ children }) => {
    const [lib, setData] = useState();
    const [token, _setToken] = useState(localStorage.getItem('TOKEN') || '');
    const [user, _setUser] = useState(JSON.parse(localStorage.getItem('USER')) || '');

    const setToken = (token) => {
        if (token) {
            localStorage.setItem('TOKEN', token);
        }
        else {
            localStorage.removeItem('TOKEN');
        }
        _setToken(token)
    }
    const setUser = (user) => {
        if (user) {
            localStorage.setItem('USER', JSON.stringify(user));
        }
        else {
            localStorage.removeItem('USER');
        }
        _setUser(user)
    }

    return (
        <StateContext.Provider value={{ lib, token, user, setUser, setToken, setData }}>
            {children}
        </StateContext.Provider>
    )
}