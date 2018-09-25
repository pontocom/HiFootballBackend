# abstract classes for the stateMachine
class StateMachine:
    def __init__(self, initialState):
        self.currentState = initialState

    def changeState(input):
        self.currentState = self.currentState.nextState(input)
        
class State:
    def nextState(input):
        print("This state has no implementation to switch states")
        return

# Simplified states for gamepad input for one team (Basic soccer game state machine without Select Player)
# throw error for invalid input (when checking later catch error)

# missing right now: 
class KickOff(State):
    # start game

class Offensive(State):
    # foul
    # goal shot
    # lost ball

class Defensive(State):
    # foul
    # conquered ball
    # stopped goal attempt ?????????????????????????????????????????????????????????????

class Foul(State): 
    # penalty
    # offside
    # red card
    # yellow card
    # back to playing 

class OffensiveGoalAttempt(State):
    # own goal
    # successful
    # unsuccessfull

class GameOver(State):
    # throw error if more input comes

def main():
    return
    

if __name__ == '__main__':
  main()
