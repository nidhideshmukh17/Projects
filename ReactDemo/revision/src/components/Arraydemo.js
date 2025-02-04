import star from './ArrayDemo.module.css';
function Arraydemo(){

    let colors = ["red","green","blue","yellow"];

    let studArr = [
        {rollno:1, name:"aaa", marks:50},
        {rollno:2, name:"bbb", marks:90},
        {rollno:3, name:"ccc", marks:80}
    ]
    function rowClick(x){
        console.log(x);
    }
    return(
        <>
            <h3 className={star.cl}>Array Demo</h3>
            {
                colors.map((x,i)=>{
                    return <li>{x}{i}</li>
                })
            }
            <hr></hr>
            {/* <ul>
                {
                    colors.filter((x,i)=>{
                        return x.startsWith('b')
                    })
                }
            </ul> */}
            <table border="2">
                <tbody>
                    <tr>
                        <th>RollNo</th>
                        <th>Name</th>
                        <th>Marks</th>
                        </tr>
                    {
                        studArr.map((x) => {
                            return <tr key={x.rollno} onClick={()=>{rowClick(x)}}>
                                <td>{x.rollno}</td>
                                {/* //x point to the object */}
                                <td>{x.name}</td>
                                <td>{x.marks}</td>
                            </tr>
                        })
                    }
                </tbody>
            </table>
        </>
    )
}
export default Arraydemo;