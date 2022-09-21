CREATE OR REPLACE VIEW view_free_tools AS
SELECT ROW_NUMBER() OVER (ORDER BY tools.id) as rowNumber,
tools.id,
type_tools.name,
tools.description,
tools.state
FROM (tools 
INNER JOIN type_tools ON tools.type_tool_id = type_tools.id)
WHERE state = 'libre';


CREATE OR REPLACE VIEW view_mechanics_tools AS
SELECT 
ROW_NUMBER() OVER (ORDER BY mechanics_tools.id) as rowNumber,
mechanics_tools.id, 
tools.id as tool_id, 
type_tools.name AS tool_name, 
mechanics.id AS mechanic_id, 
mechanics.firstname AS mechanic_firstname, 
mechanics.lastname AS mechanic_lastname
FROM (((mechanics_tools
INNER JOIN mechanics ON mechanics_tools.mechanic_id = mechanics.id)
INNER JOIN tools ON mechanics_tools.tool_id = tools.id)
INNER JOIN type_tools ON tools.type_tool_id = tools.id);

CREATE OR REPLACE VIEW view_tools AS
SELECT 	ROW_NUMBER() OVER (ORDER BY id) as rowNumber, tools.id, type_tools.name, tools.description, tools.state
FROM (tools
INNER JOIN type_tools ON tools.type_tool_id = type_tools.id);