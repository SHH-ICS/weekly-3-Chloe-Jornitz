while (1)
import locale 
locale.setlocale(locale.LC_ALL, '')
print ("Welcome To Pizza Cost Calculator!")
size = input("What size pizza do you want to order?")
if size in ("large", 'Large'):
  pizza = 6
if size in ("extra large", "Extra Large", "Extra large", "extra Large", "extralarge", "Extralarge", "extra-large", "Extra-Large", "Extra-large"):
  pizza = 10
toppingnum = input("How many toppings do you want?")
if toppingnum in ("one","1"):
  toppings = 1
if toppingnum in ("two","2"):
  toppings = 1.75
if toppingnum in ("three","3"):
  toppings = 2.5
if toppingnum in ("four","4"):
  toppings = 3.35
else:
  print ("Error!")
  print ("Please chose one of the size options \"Large\"or \"Extra Large\".")
  print ("Please chose an amount of toppings that is a whole number between 1 and 4.")
  break
subtotal = (pizza+toppings)
HST = 0.13*subtotal
print("Cost:")
print("Pizza:", locale.currency(pizza))
print("Toppings:", locale.currency(toppings))
print("HST:", locale.currency(HST))
print("Total Cost:", locale.currency(HST+subtotal))
