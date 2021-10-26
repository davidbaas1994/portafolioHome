@extends('layouts.master')
    @section('content')
    
        <template v-if="menu==0">
            <inicio></inicio>
        </template>

        <template v-if="menu==1">
            <presentacion></presentacion>
        </template>

        <template v-if="menu==2">
        <h1>Contenido del menú 2</h1>
        </template>

        <template v-if="menu==3">
        <h1>Contenido del menú 3</h1>
        </template>

        <template v-if="menu==4">
            <h1>Contenido del menú 4
                                
            </h1>
        </template>
        
    @endsection
    