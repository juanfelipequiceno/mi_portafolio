// const axios = require('axios');
// const express = require('express');
// const bodyParser = require('body-parser');

// const app = express();
// const port = 3000;

// // Middleware para procesar JSON
// app.use(bodyParser.json());

// app.post('/login', async (req, res) => {
//     const userResponse = req.body.recaptchaResponse; // La respuesta del reCAPTCHA

//     // Clave secreta de reCAPTCHA
//     const secretKey = 'TU_CLAVE_SECRETA';
//     const verificationURL = `https://www.google.com/recaptcha/api/siteverify?secret=${secretKey}&response=${userResponse}`;

//     try {
//         // Usar una solicitud GET en vez de POST para verificar el reCAPTCHA
//         const googleResponse = await axios.get(verificationURL);
//         const result = googleResponse.data;

//         if (result.success) {
//             // El reCAPTCHA es válido, puedes continuar con la autenticación
//             // Realiza la verificación del usuario y la contraseña aquí.
//             res.json({ message: "Login exitoso" });
//         } else {
//             // Si el reCAPTCHA es inválido
//             res.status(400).json({ message: "Error de verificación de reCAPTCHA" });
//         }
//     } catch (error) {
//         console.error("Error al verificar reCAPTCHA:", error);
//         res.status(500).json({ message: "Error al verificar reCAPTCHA" });
//     }
// });

// app.listen(port, () => {
//     console.log(`Servidor corriendo en http://localhost:${port}`);
// });
