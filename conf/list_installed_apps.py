import sys, json
apps=json.loads(sys.stdin.readlines()[0])["Apps"]
print("\n".join(i["ID"] for i in apps if i["Installed"]))