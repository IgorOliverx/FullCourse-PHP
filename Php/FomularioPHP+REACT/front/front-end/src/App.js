import logo from './logo.svg';
import './App.css';
import {useState} from "react";
import axios, {toFormData} from "axios";

function App() {

    //aqui estamos definindo as variaveis e inializando como vazias quando osite carregar
    const [nome, setNome] = useState('');
    const [celular, setCelular] = useState('');
    const [email, setEmail] = useState('');

    //agora vamos requisitar com o http POST

    //vou usar uma logica bem rasa => ta dando erro aaaaaaaa
    const enviado = () =>{
        if(nome.length === 0){
            alert("Preencha o nome!")
        }else if(celular.length === 0){
            alert("Preencha o celular")
        }else if(email.length === 0){
            alert("Preencha o email")
        }else{
            alert("sucesso")
            //se todos os campos estiverem preenchidos chegaremos aqui
            const url = 'http://localhost:8080' //esta funcionando :)

            let fData = new FormData();
            fData.append('nome', nome);
            fData.append('celular', celular);
            fData.append('email', email);

            //aqui vamos enviar a solicitação post ao servidor com a formatação feita acima
            axios.post(url, fData)
                .then(res => alert(res.data))
                .catch(error => alert(error));
        }
    }


//ate a logica boba errou, mas enfim, vamos adiante
  return (
    <div className="App">
      <>
      <div className="container">
        {/*inputs do formulario*/}

         <label htmlFor="nome">Nome:</label>
         <input type="text" name="nome" id="nome" value={nome} onChange={(e) => setNome(e.target.value)}/>

          <label htmlFor="celular">Celular:</label>
          <input type="text" name="celular" id="celular" value={celular} onChange={(e) => setCelular(e.target.value)}/>

          <label htmlFor="email">Email:</label>
          <input type="text" name="email" id="email" value={email} onChange={(e) => setEmail(e.target.value)}/>

          <input type="button" name="enviar" id="enviar" value="SEND" onClick={enviado}/>

          {/*//quase ia me esquecendo ->< precisamops ativar a funcao que criamos :)*/}



      </div>


      </>
    </div>
  );
}

export default App;
