function serverstatus() 
		{
		document.CUSTOMCOMMAND.COMMAND.value = "status";
		document.CUSTOMCOMMAND.submit();		
		}
function maplist()
		{
                document.CUSTOMCOMMAND.COMMAND.value = "maps *";
                document.CUSTOMCOMMAND.submit();
		}
function changemap()
		{
		document.CUSTOMCOMMAND.COMMAND.value = ("changelevel " + document.CUSTOMCOMMAND.MAPNAME.value);
		document.CUSTOMCOMMAND.submit();
		}
function restart()
		{
		document.CUSTOMCOMMAND.COMMAND.value = "restart";
                document.CUSTOMCOMMAND.submit();
                }
function kickid()
		{
		document.CUSTOMCOMMAND.COMMAND.value = ("kickid " + document.COMMONCOMMANDS.KICKID.value + " " + "\"" + document.COMMONCOMMANDS.KICKREASON.value + "\"");
                document.CUSTOMCOMMAND.submit();
                }
function say()
		{
		document.CUSTOMCOMMAND.COMMAND.value = ("say " + "\"" + document.COMMONCOMMANDS.SAY.value + "\"");
		document.CUSTOMCOMMAND.submit();
		}
function search()
		{
		document.CUSTOMCOMMAND.COMMAND.value = ("cvarlist " + document.COMMONCOMMANDS.SEARCH.value); 
		document.CUSTOMCOMMAND.submit();
		}
