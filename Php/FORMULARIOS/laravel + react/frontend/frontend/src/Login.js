import React, { useState, useEffect } from "react";
import { Button } from 'react-bootstrap';
import { useNavigate } from "react-router-dom";
import {Form} from "react-bootstrap";

function Login() {
    const [email, setEmail] = useState('');
    const [senha, setSenha] = useState('');
    const [erros, setErros] = useState([]);
    const navigate = useNavigate();

    useEffect(() => {
        // Verifica se o usuário já está logado
        if (localStorage.getItem('usuario')) {
            navigate('/painel');
        }
    }, []);

    const handleSubmit = async (event) => {
        event.preventDefault();

        // Valida as credenciais de login
        const dados = {
            email,
            senha,
        };

        const response = await fetch('/api/login', {
            method: 'POST',
            body: JSON.stringify(dados),
        });

        if (response.status === 200) {
            // O login foi bem-sucedido
            localStorage.setItem('usuario', JSON.stringify(response.data));
            navigate('/painel');
        } else {
            // O login falhou
            setErros(response.data.errors);
        }
    };

    return (
        <div className="container">
            <h1>Login</h1>

            <Form onSubmit={handleSubmit}>
                <Form.Group controlId="email">
                    <Form.Label>E-mail</Form.Label>
                    <Form.Control type="email" placeholder="E-mail" value={email} onChange={(event) => setEmail(event.target.value)} />
                </Form.Group>

                <Form.Group controlId="senha">
                    <Form.Label>Senha</Form.Label>
                    <Form.Control type="password" placeholder="Senha" value={senha} onChange={(event) => setSenha(event.target.value)} />
                </Form.Group>

                <Button variant="primary" type="submit">
                    Login
                </Button>
            </Form>

            {erros && (
                <ul className="alert alert-danger">
                    {erros.map((erro) => (
                        <li key={erro}>{erro}</li>
                    ))}
                </ul>
            )}
        </div>
    );
}

export default Login;
