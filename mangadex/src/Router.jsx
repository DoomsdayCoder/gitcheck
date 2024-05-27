import { createBrowserRouter,RouterProvider } from "react-router-dom";
import { Contextprovider } from "./context/context";
import Login from "./Views/Auth/Login";
import GuestLayout from "./layouts/GuestLayout";
import DefaultLayout from "./layouts/DefaultLayout";
import Home from "./Views/Home";
import Entry from "./Views/Dashboard/Entry";
import Test from "./Views/Test";
import ForgotPassword from "./Views/Auth/ForgotPassword";



export const router = createBrowserRouter([
    {

        path: '/auth',
        element: <GuestLayout/>,
        children:[{
            path: "/auth",
            element: <Login/>
        },
        {
            path: "/auth/forgotPassword",
            element:<ForgotPassword/>
        }
    ]
    },
    {
        path: "/",
        element: <DefaultLayout/>,
        children: [
            {
                path: "/",
                element: <Home/>
            },
            {
                path: "/entry",
                element: <Entry/>
            },
            {
                path: '/test',
                element: <Test/>
            }
        ]
    },
    
]);

export const RouteNavigate = ()=> {
  return (
    <Contextprovider>
        <RouterProvider router={router} />
    </Contextprovider>
  )
}

