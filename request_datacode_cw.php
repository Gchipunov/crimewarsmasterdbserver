<?php

echo $string_prompt = "Create a 3D model of a wooden hammer in obj format";
echo $string_prompt = "Create a 3D model of a wooden hammer in obj format with 300 triangles";

// http://127.0.0.1:11434/api/chat
// http://localhost:8000/v1/chat/completions

$url = "http://localhost:8000/v1/chat/completions";
$url = "http://localhost:11434/api/generate";
// curl http://localhost:11434/api/generate -d '{
 // "model": "mistral",
 // "prompt": "[INST] why is the sky blue? [/INST]",
 // "raw": true,
 // "stream": false
//}'

//$url = 'https://example.com/api/endpoint';

$data = array('model' => 'llama3.2', 'prompt' => $string_prompt, 'stream' => false);

// 
//$data = array('model' => 'LLaMA-Mesh-IQ4_XS.gguf', 'prompt' => $string_prompt, 'stream' => false);

$data = array('model' => 'LlamaMesh', 'prompt' => $string_prompt, 'stream' => false);

//hf.co/bartowski/LLaMA-Mesh-GGUF:

// https://huggingface.co/bartowski/LLaMA-Mesh-GGUF?local-app=ollama

   //       self.llm.pull(model='hf.co/bartowski/LLaMA-Mesh-GGUF:Q4_K_M')
    //        else:
     //           import llama_cpp

      //          self.llm = llama_cpp.Llama(
      //              model_path=absolute_path(".models/LLaMA-Mesh-Q4_K_M.gguf"),


$ch = curl_init($url);
//$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

$response = curl_exec($ch);
curl_close($ch);

echo $response;

if ($response === false) {
    $error = curl_error($ch);
    echo "Error: $error";
}

$string = "Hello, world!";

// Replace "world" with "PHP"
$new_string = str_replace("\\n", "\n", $response);
echo $new_string;


// https://github.com/ollama/ollama/blob/main/docs/api.md
//curl http://localhost:11434/api/generate -d '{
 // "model": "llama3.2",
 // "prompt": "Why is the sky blue?",
//  "stream": false
//}'

// https://github.com/meta-llama/llama-cookbook/blob/main/end-to-end-use-cases/coding/text2sql/csv2db.py
//

//echo info();
// https://huggingface.co/spaces


// https://huggingface.co/spaces/Zhengyi/LLaMA-Mesh
//https://github.com/nv-tlabs/LLaMA-Mesh/blob/main/app.py
// https://github.com/KoreTeknology/Blender-Generative-AI-Addon
// https://github.com/AIGODLIKE/ComfyUI-BlenderAI-node/releases/tag/v1.6.0
// https://github.com/AIGODLIKE/EasyBakeNode
// https://github.com/comfyanonymous/ComfyUI
// https://huggingface.co/lllyasviel/ControlNet-v1-1/tree/main
// https://github.com/Fannovel16/comfyui_controlnet_aux
// https://github.com/benrugg/AI-Render
// https://github.com/blender/blender-addons
// https://github.com/domlysz/BlenderGIS
// https://github.com/ryvn-dev/blender-gpt
// https://github.com/move-ai/BlenderAddon
// https://github.com/BlenderAI/BlenderRL
// https://github.com/agmmnn/awesome-blender
// https://github.com/alabd14313/awesome-BGE
// https://github.com/SunzeY/awesome-blender-script
// https://github.com/OpenChemistry/avogadrolibs
// OpenPose library
// https://github.com/yataobian/awesome-ebm
// https://huggingface.co/meta-llama/Llama-3.1-8B
// 

/*
 examples=[
                        ['Create a 3D model of a wooden hammer'],
                        ['Create a 3D model of a pyramid in obj format'],
                        ['Create a 3D model of a cabinet.'],
                        ['Create a low poly 3D model of a coffe cup'],
                        ['Create a 3D model of a table.'],
                        ["Create a low poly 3D model of a tree."],
                        ['Write a python code for sorting.'],
                        ['How to setup a human base on Mars? Give short answer.'],
                        ['Explain theory of relativity to me like I’m 8 years old.'],
                        ['What is 9,000 * 9,000?'],
                        ['Create a 3D model of a soda can.'],
                        ['Create a 3D model of a sword.'],
                        ['Create a 3D model of a wooden barrel'],
                        ['Create a 3D model of a chair.']
                        ],
						
						*/

?>

