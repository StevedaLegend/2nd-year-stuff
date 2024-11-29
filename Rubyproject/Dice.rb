import random

class Dice:
    def __init__(self):
        self.roll()

    def roll(self):
        self.face_value = random.randint(1, 6)

    def getFaceValue(self):
        return self.face_value
