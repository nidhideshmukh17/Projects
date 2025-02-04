import  { useRef } from "react";
import Cookies from "js-cookie";

function UnControlled(){

    let txtUname = useRef();
    let txtPassword = useRef();

    function funSubmit(event){
        event.preventDefault();
        console.log(txtUname.current.value, txtPassword.current.value);
        Cookies.set(txtUname.current.value, txtPassword.current.value)
    }
    function funRemove(){
        let txt = prompt("enter the cookie name : ");
        Cookies.remove(txt);
    }
    function funRead(){
        let txt = prompt("enter the cookie name : ");
        let res = Cookies.get(txt);
        console.log(res);
    }

    return(
        <>
        <h3>UnControlled Form</h3>
            <form onSubmit={funSubmit}>
                UserName : <input type="text" ref={txtUname}/><br/>
                Password : <input type="text" ref={txtPassword}/><br/>
                <input type="submit" value="Submit" /><br/>
                <input type="button" value="Remove Cookie" onClick={funRemove}/><br/>
                <input type="button" value="Read cookie" onClick={funRead}/>
            </form>
        </>
            )
        }
        export default UnControlled;