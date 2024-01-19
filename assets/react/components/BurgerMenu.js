import React, { useState } from 'react';
import Drawer from '@mui/material/Drawer';
import IconButton from '@mui/material/IconButton';
import MenuIcon from '@mui/icons-material/Menu';

const BurgerMenu = () => {
  const [isDrawerOpen, setDrawerOpen] = useState(false);

  const toggleDrawer = () => {
    setDrawerOpen(!isDrawerOpen);
  };

  return (
    <div>
      <IconButton onClick={toggleDrawer} color="inherit" aria-label="Menu">
        <MenuIcon style={{ color: 'white'}} />
      </IconButton>

      <Drawer anchor="left" open={isDrawerOpen} onClose={toggleDrawer} classes={{ paper: 'height-drawer'}}>
        <div className='container-burger' style={{ padding: 20}}>
        <ul>
            <li><a href="/skin">Skin Analyse</a></li>
            <li><a href="/daily-routine">Daily Routine</a></li>
            <li><a href="/app_points">Compte Fidélité</a></li>
          </ul>
        </div>
      </Drawer>
    </div>
  );
};

export default BurgerMenu;