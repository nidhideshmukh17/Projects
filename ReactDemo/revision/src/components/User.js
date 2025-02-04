import { useState } from "react"
import ControlForm from "./ControlForm";

function User(){

    var arr=[
        {userId:1,userName:"aaa",userCity:"Pune"},
        {userId:2,userName:"bbb",userCity:"Mumbai"},
        {userId:3,userName:"ccc",userCity:"Delhi"}
    ];

    const[rowFlag, setRowFlag]=useState(false);

    let[Obj,setObj]=useState();
    
    function funRow(x){
        setRowFlag(true);
        setObj(x);
    }

    return(
        <>
        <table border="2">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>City</th>
        </tr>
        {
            arr.map((x)=>{
                return <tr key={x.userId} onClick={()=>{funRow(x);}}>
                    <td>{x.userId}</td>
                    <td>{x.userName}</td>
                    <td>{x.userCity}</td>
                    </tr>
            })
        }
        </table>
        {
            rowFlag && <ControlForm rowData={Obj}/>
        }
        </>)
}
       
export default User;