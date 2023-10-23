import './App.css';
import {useEffect, useState} from "react";
import axios, {toFormData} from "axios";

function App() {

    const [nome, setName] = useState('');
    const [mobile, setMobile] = useState('');
    const [email, setEmail] = useState('');

    const enviado = () =>{
        if(nome.length === 0){
            alert("Por favor, preencha o nome")
        }else if(mobile.length === 0){
            alert("Por favor, preencha o celular");
        }else if(email.length === 0){
            alert("Por favor, preencha o email");
        }else{
            // se tudo der certo vai enviar por aqui
            const url = 'http://localhost:8000';

            let fData = new FormData();
            fData.append('nome', nome);
            fData.append('mobile', mobile);
            fData.append('email', email);

            axios.post(url, fData)
                .then(res => alert(res.data))
                .catch(error => alert(error));


        }

    }


  return (
    <>
    <div className="container">
      {/*input do nome*/}
      <label htmlFor="name">Nome</label>
      <input type="text" name="nome" id="nome" value={nome} onChange={(e) => setName(e.target.value)}/>

      {/*input do celular*/}
      <label htmlFor="mobile">Mobile</label>
      <input type="text" name="mobile" id="mobile" value={mobile} onChange={(e) => setMobile(e.target.value)}/>


      {/*input do email*/}
      <label htmlFor="email">Email</label>
      <input type="text" name="email" id="email" value={email} onChange={(e) => setEmail(e.target.value)}/>


      <input type="button" name="send" id="send" value="SEND" onClick={enviado}/>

    </div>

    </>
  );
}

export default App;
