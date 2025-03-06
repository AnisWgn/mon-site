def complétion(*args):
    zeros = []
    non_zeros = []
    for i in range(8):
        if i < len(args):
            if args[i] == 0:
                zeros.append("0")
            else:
                non_zeros.append(str(args[i]))
        else:
            zeros.append("0")
    result = "".join(zeros) + "".join(non_zeros)
    return result