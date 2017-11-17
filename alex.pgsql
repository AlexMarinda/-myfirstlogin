--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.5
-- Dumped by pg_dump version 9.6.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE users (
    fname character varying(50) NOT NULL,
    sname character varying(50) NOT NULL,
    username character varying(50) NOT NULL,
    password character varying(600) NOT NULL
);


ALTER TABLE users OWNER TO postgres;

--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (fname, sname, username, password) FROM stdin;
firstname	lastname	user	3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2
marinda	ales	ales	1eff4aa8a791da2caee7f7ea74c425edf5e90ee3f7316c8c1a301a15558fdc37bdfdfc123f0acf1114b6203a5cbe741007b6a0c795b96ab1bad6d1e8041b5b68
boy	sadk	boy	ad5e0fc38d128d140cf74502f3eeadaf31ed73b6e1d1f06507183b1a50c80bb6abd96a43d432b60c54675b8eae354d69aa9a6d97d40f29360fcd93646e38df77
test25	test25	test25	579ef956f025dfca44443bc48cc4178576b814f20213ebabde440b48abfa1db8ac697ab673cefff1ca836bdc2fff07fad329a54b4117259ab026a3ab6367df78
\.


--
-- PostgreSQL database dump complete
--

