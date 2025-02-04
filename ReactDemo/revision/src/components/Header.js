import { useParams } from "react-router-dom";
import "./Header.css";

function Header(){

    let title = "Bitcode";
    let today = new Date().toDateString();
    let st = {color:"brown", float:"right"};
    //let userData = useParams();
    
    return(
        <>
            <h3 className="title">Welcome {title}</h3>
            <h5 style={st}>{today}</h5>
            {/*<p>UserData = {userData.id}{userData.str}</p>*/}
            <br/>
        </>
    )
}
export default Header;