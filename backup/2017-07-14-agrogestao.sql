--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.7
-- Dumped by pg_dump version 9.5.1

-- Started on 2017-07-14 19:48:00

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE agrogestao;
--
-- TOC entry 2188 (class 1262 OID 18769)
-- Name: agrogestao; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE agrogestao WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';


ALTER DATABASE agrogestao OWNER TO postgres;

\connect agrogestao

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 6 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- TOC entry 2189 (class 0 OID 0)
-- Dependencies: 6
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


--
-- TOC entry 1 (class 3079 OID 12355)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2191 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 191 (class 1259 OID 18876)
-- Name: fabricantes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE fabricantes (
    id integer NOT NULL,
    nome_fabricante character varying(255) NOT NULL,
    obs_fabricante text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE fabricantes OWNER TO postgres;

--
-- TOC entry 190 (class 1259 OID 18874)
-- Name: fabricantes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE fabricantes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE fabricantes_id_seq OWNER TO postgres;

--
-- TOC entry 2192 (class 0 OID 0)
-- Dependencies: 190
-- Name: fabricantes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE fabricantes_id_seq OWNED BY fabricantes.id;


--
-- TOC entry 182 (class 1259 OID 18772)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE migrations OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 18770)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE migrations_id_seq OWNER TO postgres;

--
-- TOC entry 2193 (class 0 OID 0)
-- Dependencies: 181
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;


--
-- TOC entry 185 (class 1259 OID 18791)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE password_resets OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 18816)
-- Name: tipo_lubrificantes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tipo_lubrificantes (
    id integer NOT NULL,
    tipo_lubrificante character varying(255) NOT NULL,
    dsc_tipo_lubrificante text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE tipo_lubrificantes OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 18814)
-- Name: tipo_lubrificantes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_lubrificantes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipo_lubrificantes_id_seq OWNER TO postgres;

--
-- TOC entry 2194 (class 0 OID 0)
-- Dependencies: 188
-- Name: tipo_lubrificantes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipo_lubrificantes_id_seq OWNED BY tipo_lubrificantes.id;


--
-- TOC entry 193 (class 1259 OID 18903)
-- Name: tipo_veiculos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tipo_veiculos (
    id integer NOT NULL,
    nome_tipo_veiculo character varying(255) NOT NULL,
    dsc_tipo_veiculo text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE tipo_veiculos OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 18901)
-- Name: tipo_veiculos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_veiculos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipo_veiculos_id_seq OWNER TO postgres;

--
-- TOC entry 2195 (class 0 OID 0)
-- Dependencies: 192
-- Name: tipo_veiculos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipo_veiculos_id_seq OWNED BY tipo_veiculos.id;


--
-- TOC entry 184 (class 1259 OID 18780)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE users OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 18778)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO postgres;

--
-- TOC entry 2196 (class 0 OID 0)
-- Dependencies: 183
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- TOC entry 195 (class 1259 OID 18917)
-- Name: veiculos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE veiculos (
    id integer NOT NULL,
    nome_veiculo character varying(255) NOT NULL,
    id_tipo_veiculo integer NOT NULL,
    id_fabricante_veiculo integer NOT NULL,
    modelo_veiculo character varying(255) NOT NULL,
    chassi_veiculo character varying(255) NOT NULL,
    renavam_veiculo character varying(255) NOT NULL,
    ano_fabricacao_veiculo integer NOT NULL,
    ano_modelo_veiculo integer NOT NULL,
    valor_aquisicao_veiculo double precision NOT NULL,
    valor_atual_veiculo double precision NOT NULL,
    dsc_veiculo text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE veiculos OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 18800)
-- Name: veiculos_old; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE veiculos_old (
    id integer NOT NULL,
    nome_veiculo character varying(255) NOT NULL,
    dsc_veiculo text NOT NULL,
    tipo_veiculo character varying(255) NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE veiculos_old OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 18798)
-- Name: veiculos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE veiculos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE veiculos_id_seq OWNER TO postgres;

--
-- TOC entry 2197 (class 0 OID 0)
-- Dependencies: 186
-- Name: veiculos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE veiculos_id_seq OWNED BY veiculos_old.id;


--
-- TOC entry 194 (class 1259 OID 18915)
-- Name: veiculos_id_seq1; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE veiculos_id_seq1
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE veiculos_id_seq1 OWNER TO postgres;

--
-- TOC entry 2198 (class 0 OID 0)
-- Dependencies: 194
-- Name: veiculos_id_seq1; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE veiculos_id_seq1 OWNED BY veiculos.id;


--
-- TOC entry 2032 (class 2604 OID 18879)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY fabricantes ALTER COLUMN id SET DEFAULT nextval('fabricantes_id_seq'::regclass);


--
-- TOC entry 2028 (class 2604 OID 18775)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);


--
-- TOC entry 2031 (class 2604 OID 18819)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_lubrificantes ALTER COLUMN id SET DEFAULT nextval('tipo_lubrificantes_id_seq'::regclass);


--
-- TOC entry 2033 (class 2604 OID 18906)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_veiculos ALTER COLUMN id SET DEFAULT nextval('tipo_veiculos_id_seq'::regclass);


--
-- TOC entry 2029 (class 2604 OID 18783)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- TOC entry 2034 (class 2604 OID 18920)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY veiculos ALTER COLUMN id SET DEFAULT nextval('veiculos_id_seq1'::regclass);


--
-- TOC entry 2030 (class 2604 OID 18803)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY veiculos_old ALTER COLUMN id SET DEFAULT nextval('veiculos_id_seq'::regclass);


--
-- TOC entry 2179 (class 0 OID 18876)
-- Dependencies: 191
-- Data for Name: fabricantes; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO fabricantes VALUES (1, 'Case', 'Case', '2017-07-14 19:13:59', '2017-07-14 19:13:59');
INSERT INTO fabricantes VALUES (2, 'Valmet', 'Valment', '2017-07-14 19:24:42', '2017-07-14 19:24:42');


--
-- TOC entry 2199 (class 0 OID 0)
-- Dependencies: 190
-- Name: fabricantes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('fabricantes_id_seq', 2, true);


--
-- TOC entry 2170 (class 0 OID 18772)
-- Dependencies: 182
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO migrations VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO migrations VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO migrations VALUES (3, '2017_07_14_081756_create_veiculos_table', 1);
INSERT INTO migrations VALUES (4, '2017_07_14_171049_create_tipo_lubrificantes_table', 2);
INSERT INTO migrations VALUES (5, '2017_07_14_174301_create_fabricantes_table', 3);
INSERT INTO migrations VALUES (6, '2017_07_14_174734_create_fabricantes_table', 4);
INSERT INTO migrations VALUES (7, '2017_07_14_174928_create_fabricantes_table', 5);
INSERT INTO migrations VALUES (8, '2017_07_14_183602_create_tipo_veiculos_table', 6);
INSERT INTO migrations VALUES (9, '2017_07_14_191225_create_fabricantes_table', 7);
INSERT INTO migrations VALUES (10, '2017_07_14_191245_create_veiculos_table', 7);
INSERT INTO migrations VALUES (11, '2017_07_14_191301_create_tipo_veiculos_table', 7);
INSERT INTO migrations VALUES (12, '2017_07_14_191538_create_veiculos_table', 8);


--
-- TOC entry 2200 (class 0 OID 0)
-- Dependencies: 181
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('migrations_id_seq', 12, true);


--
-- TOC entry 2173 (class 0 OID 18791)
-- Dependencies: 185
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2177 (class 0 OID 18816)
-- Dependencies: 189
-- Data for Name: tipo_lubrificantes; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tipo_lubrificantes VALUES (1, 'Tipo 1', 'Lubrificante para máquinas', '2017-07-14 17:14:58', '2017-07-14 17:14:58');


--
-- TOC entry 2201 (class 0 OID 0)
-- Dependencies: 188
-- Name: tipo_lubrificantes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_lubrificantes_id_seq', 1, true);


--
-- TOC entry 2181 (class 0 OID 18903)
-- Dependencies: 193
-- Data for Name: tipo_veiculos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tipo_veiculos VALUES (1, 'Caminhão', 'Caminhão', '2017-07-14 19:13:33', '2017-07-14 19:13:33');
INSERT INTO tipo_veiculos VALUES (2, 'Colheitadeira', 'colheitadeira', '2017-07-14 19:24:24', '2017-07-14 19:24:24');


--
-- TOC entry 2202 (class 0 OID 0)
-- Dependencies: 192
-- Name: tipo_veiculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_veiculos_id_seq', 2, true);


--
-- TOC entry 2172 (class 0 OID 18780)
-- Dependencies: 184
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO users VALUES (1, 'Glauber Boff', 'bglauber@gmail.com', '$2y$10$NrphEISUypxVkCEibHG5nuh26d10z4xLXR.FLhaBZQYumJFalrMqa', NULL, '2017-07-14 13:52:33', '2017-07-14 13:52:33');


--
-- TOC entry 2203 (class 0 OID 0)
-- Dependencies: 183
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- TOC entry 2183 (class 0 OID 18917)
-- Dependencies: 195
-- Data for Name: veiculos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO veiculos VALUES (1, 'Colheitadeira Case 2388', 2, 2, '2388', '981729u2394jh9324u', '092384083043284', 2017, 2017, 500000324234, 32423342, 'Teste', '2017-07-14 19:23:01', '2017-07-14 19:43:45');


--
-- TOC entry 2204 (class 0 OID 0)
-- Dependencies: 186
-- Name: veiculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('veiculos_id_seq', 1, true);


--
-- TOC entry 2205 (class 0 OID 0)
-- Dependencies: 194
-- Name: veiculos_id_seq1; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('veiculos_id_seq1', 1, true);


--
-- TOC entry 2175 (class 0 OID 18800)
-- Dependencies: 187
-- Data for Name: veiculos_old; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO veiculos_old VALUES (1, 'Teste', 'teste', '1', 1, '2017-07-14 13:52:58', '2017-07-14 18:37:04');


--
-- TOC entry 2047 (class 2606 OID 18884)
-- Name: fabricantes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY fabricantes
    ADD CONSTRAINT fabricantes_pkey PRIMARY KEY (id);


--
-- TOC entry 2036 (class 2606 OID 18777)
-- Name: migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 2045 (class 2606 OID 18824)
-- Name: tipo_lubrificantes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_lubrificantes
    ADD CONSTRAINT tipo_lubrificantes_pkey PRIMARY KEY (id);


--
-- TOC entry 2049 (class 2606 OID 18911)
-- Name: tipo_veiculos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_veiculos
    ADD CONSTRAINT tipo_veiculos_pkey PRIMARY KEY (id);


--
-- TOC entry 2038 (class 2606 OID 18790)
-- Name: users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- TOC entry 2040 (class 2606 OID 18788)
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 2043 (class 2606 OID 18808)
-- Name: veiculos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY veiculos_old
    ADD CONSTRAINT veiculos_pkey PRIMARY KEY (id);


--
-- TOC entry 2051 (class 2606 OID 18925)
-- Name: veiculos_pkey1; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY veiculos
    ADD CONSTRAINT veiculos_pkey1 PRIMARY KEY (id);


--
-- TOC entry 2041 (class 1259 OID 18797)
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- TOC entry 2054 (class 2606 OID 18931)
-- Name: veiculos_id_fabricante_veiculo_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY veiculos
    ADD CONSTRAINT veiculos_id_fabricante_veiculo_foreign FOREIGN KEY (id_fabricante_veiculo) REFERENCES fabricantes(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2053 (class 2606 OID 18926)
-- Name: veiculos_id_tipo_veiculo_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY veiculos
    ADD CONSTRAINT veiculos_id_tipo_veiculo_foreign FOREIGN KEY (id_tipo_veiculo) REFERENCES tipo_veiculos(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2052 (class 2606 OID 18809)
-- Name: veiculos_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY veiculos_old
    ADD CONSTRAINT veiculos_user_id_foreign FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2190 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-07-14 19:48:01

--
-- PostgreSQL database dump complete
--

