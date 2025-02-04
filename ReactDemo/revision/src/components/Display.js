import React from 'react';
import tblStyle from './Display.module.css';
function Display(props){

    let products = props.arr;
    
    function funRowClick(x,event){

        if(event.target.textContent === "Edit"){
            let newPrice = prompt("Enter the price : ");
            if(newPrice){
                let obj = {prodName : x.prodName, prodPrice : newPrice};
                props.getRow(obj);
            }
        }
        else if(event.target.textContent === "Delete"){
            let prodRemove = x.prodName;
            props.getRemove(prodRemove);
        }
    }
    return(
        <React.Fragment>
            <table border="2" className={tblStyle.table}>
                <tbody>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    {
                        products.map((x, i) => {
                            return (
                                <tr key={x.prodName} className={tblStyle.tr1}>
                                    <td>{i + 1}</td>
                                    <td>{x.prodName}</td>
                                    <td>{x.prodPrice}</td>
                                    <td onClick={(event)=>{
                                            event.preventDefault();
                                            funRowClick(x,event)
                                        }}>
                                        <a href="#">Edit</a>/
                                        <a href="#">Delete</a>
                                    </td>
                                </tr>
                            )
                        })
                    }
                </tbody>
            </table>
        </React.Fragment>
    )
}
export default Display;