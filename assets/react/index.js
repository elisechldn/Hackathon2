import React from 'react'
import ReactDOM from 'react-dom/client'
import GradientCover from './pages/Card'
import BurgerMenu from './components/BurgerMenu'

ReactDOM.createRoot(document.getElementById('menu-burger')).render(
    <React.StrictMode>
        <BurgerMenu />
    </React.StrictMode>
)

ReactDOM.createRoot(document.getElementById('root')).render(
    <React.StrictMode>
        <GradientCover/>
    </React.StrictMode>,
)

