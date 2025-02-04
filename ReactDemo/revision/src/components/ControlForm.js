import { useEffect, useState } from "react";

function Controlled(props){

    let user = props.rowData;

    let[txtId,setId]=useState();
    let[txtName,setName]=useState();
    let[txtCity,setCity]=useState();

    useEffect(()=>{
        setId(user.userId);
        setName(user.userName);
        setCity(user.userCity);
    },[props]);

    return(
        <>
        <h2>Show user Details..</h2>
        <form>
            Id:<input type="text" value={txtId}/><br/>       
            Name:<input type="text" value={txtName}/><br/>
            City:<input type="text" value={txtCity}/>
        </form>
        </>
    )

}
export default Controlled;