PGDMP         7                y           prueba    13.3    13.3     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16394    prueba    DATABASE     b   CREATE DATABASE prueba WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE prueba;
                postgres    false            �            1259    16434    prueba    TABLE     �   CREATE TABLE public.prueba (
    id integer,
    nombre character varying(100),
    apellidos character varying(100),
    edad integer,
    correo character varying(100)
);
    DROP TABLE public.prueba;
       public         heap    postgres    false            �          0    16434    prueba 
   TABLE DATA           E   COPY public.prueba (id, nombre, apellidos, edad, correo) FROM stdin;
    public          postgres    false    200   :       �      x������ � �     