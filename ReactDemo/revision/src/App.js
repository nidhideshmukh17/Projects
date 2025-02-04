//import logo from './logo.svg';
import { useState } from 'react';
import './App.css';
import AddProduct from './components/AddProduct';
import Display from './components/Display';
import Header from './components/Header';
import Arraydemo from './components/Arraydemo';
import Mybtn from './components/Mybtn';
import UnControlled from './components/UnControlled';
import { Route, Routes } from 'react-router-dom';
import Home from './components/Home';
import User from './components/User';
import Navigation from './components/Navigation';
import pic from './images/sunset-scenery.jpg';
import SignUp from './components/SignUp';
//import Controlled from './components/ControlForm';
// import { useRef } from "react";

function App() {
    let products = [{prodName: "marker", prodPrice: 200},
                    {prodName: "book", prodPrice: 500}
    ];

    let [list,setList]=useState(products);

    let [count,setCount]=useState(0);
    function funClick(){
      setCount(count+1);
      console.log(count);
    }
  
    // show
    let [btnClick,setBtnClick]=useState(false);
    function showForm(){
      setBtnClick(!btnClick);
    }

    // insert
    function rowInsert(newObj){
      // console.log(newObj);
      setList([...list,newObj]);
    }

    // update
    function rowUpdate(newValue){
      // console.log(newValue);
      let arr = list.map((x)=>{
        if(x.prodName === newValue.prodName){
          x.prodPrice = newValue.prodPrice;
        }
        return x;
      })
      setList(arr);
    }

    // delete
    function rowDelete(prodName){
      // let arr = list.map((x,i)=>{
      //   if(x.prodName === newObj.prodName){
      //    list.splice(i,1)
      //   }
      //   return x;
      // })

      let arr = list.filter((x) => {
        if(x.prodName !== prodName){
          return x;
        }
      })
      setList(arr);
    }

    function funSort(){
      let arr1 = [...list];
      let arr = arr1.sort(function(a,b){
        return b.prodPrice-a.prodPrice;
      });
      // let arr = arr1.sort().reverse();
      // console.log(arr);
      setList(arr);
    }

    
    let st={width:"100%",height:"500px"};
  
  return (
    <>
    <div>
      <img src={pic} style={st}></img>
    </div>

      <Arraydemo />
      <hr></hr>

      <input type="button" value="Click" onClick={funClick}/>
      <div>Count = {count}</div>
      <hr></hr>

      <Header/>

      <Display arr={list} getRow={rowUpdate} getRemove={rowDelete}/>
      <hr></hr>

      <input type="button" value="New Product" onClick={showForm}/>
      {
        btnClick && <AddProduct getNewObj={rowInsert}/>
      }
      <input type="button" value="Sort" onClick={funSort}/>
      <hr></hr>

      <Mybtn text="Login" type="button"/>
      <hr></hr>

      <UnControlled />
      <hr></hr>

      <User />
      <hr></hr> 

      <Navigation />

      <SignUp />

      {/* Router Demo */}
      <Routes>
      <Route path='/' Component={Home}></Route>
      <Route path='/data' component={User}></Route>
      <Route path='/user' component={UnControlled}></Route>
      <Route path='/signUp/:id/:str' component={SignUp}></Route>
      {/*<Route path='/*' Component={Home}></Route>*/}
      </Routes>

    </>
  );
}  
export default App;